/* eslint-disable prettier/prettier */
import {StyleSheet, Text, View, SafeAreaView} from 'react-native';
import React from 'react';

const SplashScreen = () => {
  return (
    <SafeAreaView style={styles.body}>
      <Text>SplashScreen</Text>
    </SafeAreaView>
  );
};

export default SplashScreen;

const styles = StyleSheet.create({
  body: {
    flex: 1,
    justifyContent: 'center',
    alignContent: 'center',
  },
});
