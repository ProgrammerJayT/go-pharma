import {StyleSheet, Text, View, SafeAreaView, StatusBar} from 'react-native';
import React from 'react';
import SplashScreen from './resources/views/SplashScreen';

const App = () => {
  return (
    <SafeAreaView style={styles.body}>
      <SplashScreen />

      <StatusBar backgroundColor={'#000'} />
    </SafeAreaView>
  );
};

export default App;

const styles = StyleSheet.create({
  body: {
    flex: 1,
    backgroundColor: '#fff',
  },
});
